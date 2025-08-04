import React from 'react';
import ReactDOM from 'react-dom';

import Navitem from '@/components/navitem'

export default function Navbar() {
    return (
        <nav class="p-5 bg-gray-700">
            <Navitem href='/' display='Home' />
            <Navitem href='/about' display='About' />
            <Navitem href='/contact' display='Contact' />
        </nav>
    );
}
