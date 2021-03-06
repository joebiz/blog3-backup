<?php

N2Loader::import('libraries.slider.generator.abstract', 'smartslider');

class N2GeneratorDribbbleProject extends N2GeneratorAbstract {

    protected $layout = 'image_extended';

    public function renderFields($form) {
        parent::renderFields($form);

        $filter = new N2Tab($form, 'filter', n2_('Filter'));

        new N2ElementDribbbleProjects($filter, 'dribbble-project-id', 'Project', '', array(
            'api' => $this->group->getConfiguration()
                                 ->getApi()
        ));
    }

    protected function _getData($count, $startIndex) {
        $data = array();
        $api  = $this->group->getConfiguration()
                            ->getApi();

        $result  = null;
        $success = $api->CallAPI('https://api.dribbble.com/v2/projects/' . $this->data->get('dribbble-project-id'), 'GET', array('per_page' => $count + $startIndex), array('FailOnAccessError' => true), $result);

        if (is_array($result)) {
            $shots = array_slice($result, $startIndex, $count);

            foreach ($shots AS $shot) {
                $user = $shot->user;
                $p    = array(
                    'image'          => isset($shot->images->hidpi) ? $shot->images->hidpi : $shot->images->normal,
                    'thumbnail'      => $shot->images->teaser,
                    'title'          => $shot->title,
                    'description'    => $shot->description,
                    'url'            => $shot->html_url,
                    'url_label'      => n2_('View'),
                    'image_normal'   => $shot->images->normal,

                    'user_url'       => $user->html_url,
                    'user_avatar'    => $user->avatar_url
                );
                foreach ($shot->tags AS $j => $tag) {
                    $p['tag_' . ($j + 1)] = $tag;
                }
                $data[] = $p;
            }
        }

        return $data;
    }
}