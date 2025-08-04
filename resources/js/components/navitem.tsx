import React from 'react';
import ReactDOM from 'react-dom';

export default function Navbar(props) {
    return (
        <a class="mr-10 text-white" href={ props.href }>{ props.display }</a>
    );
}
