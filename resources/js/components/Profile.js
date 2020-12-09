import React from 'react';
import ReactDOM from 'react-dom';

import '../.././sass/app.scss';

function Profile() {
  const stampa = () => {
    console.log("stampa");
  }
    return (
        <button onClick={stampa}>click</button>
    );
}


export default Profile;


if (document.getElementById('profile')) {
    ReactDOM.render(<Profile />, document.getElementById('profile'));
}
