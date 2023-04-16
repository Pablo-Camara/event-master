import React from 'react';
import ReactDOM from 'react-dom';
import { trans } from '../helpers/translation';

function EventTicketValidation() {
    return (
        <div className="container">
            <div className="row justify-content-center">
                <div className="col-md-8">
                    <div className="card">
                        <div className="card-header">{trans('Validate ticket')}</div>

                        <div className="card-body">I'm an example component!</div>
                    </div>
                </div>
            </div>
        </div>
    );
}

export default EventTicketValidation;

if (document.getElementById('event-ticket-validation')) {
    ReactDOM.render(<EventTicketValidation />, document.getElementById('event-ticket-validation'));
}
