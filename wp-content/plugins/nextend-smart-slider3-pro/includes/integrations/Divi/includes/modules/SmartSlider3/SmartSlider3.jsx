// External Dependencies
import React, {Component} from 'react';


class SmartSlider3 extends Component {

    static slug = 'et_pb_nextend_smart_slider_3';
    static id = 0;

    constructor(props) {
        super(props);

        this.iframeRef = React.createRef();
    }

    render() {
        this.id++;

        const style = {
            width: '100%', display: 'block', border: '0'
        };

        return (
            <iframe title={this.slug + this.id} ref={this.iframeRef} className="n2-ss-slider-frame" style={style} src={window.SmartSlider3IframeUrl + "&sliderid=" + this.props.slider} frameBorder="0"></iframe>
        );
    }

    componentDidMount() {
        this.iframeRef.current.addEventListener('load', function (e) {
            window.n2SSIframeLoader(e.target);
        });
    }
}

export default SmartSlider3;
