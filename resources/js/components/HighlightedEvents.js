import React from 'react';
import ReactDOM from 'react-dom';
import { trans } from '../helpers/translation';

function HighlightedEvents() {
    return (
        <div className="container mb-3">
            <div className="row justify-content-center">
                <div className="col-md-8">
                    <div className="card">
                        <div className="card-header">{trans('Highlighted events')}</div>

                        <div className="card-body">I'm an example component!</div>
                    </div>
                </div>
            </div>
        </div>
    );
}

export default HighlightedEvents;

if (document.getElementById('highlighted-events')) {
    ReactDOM.render(<HighlightedEvents />, document.getElementById('highlighted-events'));
}
