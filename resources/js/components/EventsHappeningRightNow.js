import React from 'react';
import ReactDOM from 'react-dom';
import { trans } from '../helpers/translation';

function EventsHappeningRightNow() {
    return (
        <div className="container">
            <div className="row justify-content-center">
                <div className="col-md-8">
                    <div className="card">
                        <div className="card-header">{trans('Events happening right now')}</div>

                        <div className="card-body">I'm an example component!</div>
                    </div>
                </div>
            </div>
        </div>
    );
}

export default EventsHappeningRightNow;

if (document.getElementById('events-happening-right-now')) {
    ReactDOM.render(<EventsHappeningRightNow />, document.getElementById('events-happening-right-now'));
}
