import React from 'react';
import ReactDOM from 'react-dom';

import Navbar from '@/components/navbar'

export default function Admin() {
    return (
        <>
            <Navbar />
            <form className="w-full h-[80vh] flex items-center justify-center" method="post">
                <input type="hidden" name="_token" value={ document.querySelector("meta[name='csrf-token']").getAttribute("content") } />
                <div>
                    <input name="email" type="text" placeholder="Username" className="m-2 w-100 p-2 rounded-xl outline-none border-b-5 focus:border-indigo-400 bg-gray-200" />
                    <br />
                    <input name="password" type="text" placeholder="Password" className="m-2 w-100 p-2 rounded-xl outline-none border-b-5 focus:border-indigo-400 bg-gray-200" />
                    <br />
                    <input type="submit" className="m-2 w-100 p-2 rounded-full bg-purple-700 hover:bg-purple-600 text-white" value="Login" />
                    <br />
                    <p className="text-red-700 w-full text-center">{ document.querySelector("meta[name='error']") ? document.querySelector("meta[name='error']").getAttribute("content") : "" }</p>
                </div>
            </form>
        </>
    );
};
