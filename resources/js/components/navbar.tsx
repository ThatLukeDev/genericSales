import React from 'react';
import ReactDOM from 'react-dom';
import { useState, useEffect } from "react";

import Navitem from '@/components/navitem'
import { FiMenu } from "react-icons/fi";

export default function Navbar() {
    const [dropdown, setDropdown] = useState(false);

    function toggleDropdown() {
        setDropdown(x => !x);
    }

    return (
        <nav className={"group p-5 bg-gray-700 " + (!dropdown ? 'hidedropdown' : '')}>
            <FiMenu className="stroke-white size-10 cursor-pointer md:hidden" onClick={toggleDropdown} />
            <Navitem href='/' display='Home' />
            <Navitem href='/about' display='About' />
            <Navitem href='/contact' display='Contact' />
        </nav>
    );
}
