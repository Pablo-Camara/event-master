import React from 'react';
import ReactDOM from 'react-dom';
import { trans } from '../helpers/translation';

function NextEvents() {
    return (
        <div className="container mb-3">
            <div className="row justify-content-center">
                <div className="col-md-8">
                    <div className="card">
                        <div className="card-header">{trans('Next events')}</div>

                        <div className="card-body">I'm an example component!</div>
                    </div>
                </div>
            </div>
        </div>
    );
}

export default NextEvents;

if (document.getElementById('next-events')) {
    ReactDOM.render(<NextEvents />, document.getElementById('next-events'));
}
