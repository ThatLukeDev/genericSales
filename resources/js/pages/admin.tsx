import React from 'react';
import ReactDOM from 'react-dom';

import Navbar from '@/components/navbar'
import EditButton from '@/components/editbutton'

export default function Admin({ pages }) {
    return (
        <>
            <Navbar />
	    <div className="mt-30" />
	    <EditButton title="home" />
	    <EditButton title="about" />
	    <EditButton title="contact" />
        </>
    );
};
