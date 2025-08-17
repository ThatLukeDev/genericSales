import React from 'react';
import ReactDOM from 'react-dom';

import Navbar from '@/components/navbar'

export default function Admin() {
    return (
        <>
            <Navbar />
	    <div className="mt-30" />
	    <div className="inline-flex w-full justify-center"><a href="/admin/page/home" className="m-2 p-5 w-50 flex-none bg-purple-700 rounded-full clickable text-white text-center">Edit Home</a></div>
	    <div className="inline-flex w-full justify-center"><a href="/admin/page/about" className="m-2 p-5 w-50 flex-none bg-purple-700 rounded-full clickable text-white text-center">Edit About</a></div>
	    <div className="inline-flex w-full justify-center"><a href="/admin/page/contact" className="m-2 p-5 w-50 flex-none bg-purple-700 rounded-full clickable text-white text-center">Edit Contact</a></div>
        </>
    );
};
