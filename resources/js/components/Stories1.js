import React from 'react';
import ReactDOM from 'react-dom';

import '../.././sass/app.scss';

function Stories1() {
    return (
        <div className="">
          <p><strong>Giuseppe verdi</strong></p>
        </div>
    );
}


export default Stories1;


if (document.getElementById('stories1')) {
    ReactDOM.render(<Stories1 />, document.getElementById('stories1'));
}
