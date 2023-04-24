import React from 'react';
import ReactDOM from 'react-dom';
import { trans } from '../helpers/translation';

function EventsUserHasBeenInvitedTo() {
    return (
        <div className="container mb-3">
            <div className="row justify-content-center">
                <div className="col-md-8">
                    <div className="card">
                        <div className="card-header">{trans('Events you have been invited to')}</div>

                        <div className="card-body">I'm an example component!</div>
                    </div>
                </div>
            </div>
        </div>
    );
}

export default EventsUserHasBeenInvitedTo;

if (document.getElementById('events-user-has-been-invited-to')) {
    ReactDOM.render(<EventsUserHasBeenInvitedTo />, document.getElementById('events-user-has-been-invited-to'));
}
