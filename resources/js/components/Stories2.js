import React from 'react';
import ReactDOM from 'react-dom';

import '../.././sass/app.scss';

function Stories2() {
    return (
        <div className="">
          <p><strong>Donatella Bianchi</strong></p>
        </div>
    );
}


export default Stories2;


if (document.getElementById('stories2')) {
    ReactDOM.render(<Stories2 />, document.getElementById('stories2'));
}
