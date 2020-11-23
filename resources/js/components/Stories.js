import React from 'react';
import ReactDOM from 'react-dom';

import '../.././sass/app.scss';

function Stories() {
    return (
        <div className="">
          <p><strong>Mario Rossi</strong></p>
        </div>
    );
}


export default Stories;


if (document.getElementById('stories')) {
    ReactDOM.render(<Stories />, document.getElementById('stories'));
}
