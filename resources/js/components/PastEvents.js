import React from 'react';
import ReactDOM from 'react-dom';
import { trans } from '../helpers/translation';

function PastEvents() {
    return (
        <div className="container">
            <div className="row justify-content-center">
                <div className="col-md-8">
                    <div className="card">
                        <div className="card-header">{trans('Past events')}</div>

                        <div className="card-body">I'm an example component!</div>
                    </div>
                </div>
            </div>
        </div>
    );
}

export default PastEvents;

if (document.getElementById('past-events')) {
    ReactDOM.render(<PastEvents />, document.getElementById('past-events'));
}
