import React from 'react';
import { trans } from '../../helpers/translation';

function Card({
    title,
    children
}) {
    return (
        <div className="card">
            <div className="card-header">{trans(title)}</div>

            <div className="card-body">
                {children}
            </div>
        </div>
    );
}

export default Card;
