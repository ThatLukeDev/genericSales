import React from 'react';
import ReactDOM from 'react-dom';

import Navbar from '@/components/navbar'

export default function Admin({ id, detail }) {
    return (
        <>
            <Navbar />
            <form className="m-10 whitespace-pre-wrap" method="post">
                <input type="hidden" name="_token" value={ document.querySelector("meta[name='csrf-token']").getAttribute("content") } />
                <input type="text" name="title" className="m-1 text-4xl w-full h-15 p-2 border-2 border-gray-400" defaultValue={ detail.title } />
                <textarea name="text" className="m-1 text-xl w-full h-20 p-2 border-2 border-gray-400" defaultValue={ detail.text } />
                <textarea name="description" className="m-1 w-full h-50 p-2 border-2 border-gray-400" defaultValue={ detail.description } />
		<div className="w-full inline-flex justify-center"><input type="submit" className="p-2 w-50 text-white bg-purple-700 rounded-full mt-5" value="Save" /></div>
            </form>
        </>
    );
};
