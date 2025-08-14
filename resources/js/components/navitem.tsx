import React from 'react';
import ReactDOM from 'react-dom';

export default function Navbar(props) {
    return (
        <a className="text-white flex-none md:mr-10 max-md:mt-5 max-md:text-xl max-md:group-[.hidedropdown]:hidden max-md:block max-md:text-center" href={ props.href }>{ props.display }</a>
    );
}
