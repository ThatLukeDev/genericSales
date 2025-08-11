import React from 'react';
import ReactDOM from 'react-dom';

import Navbar from '@/components/navbar'

export default function Page({ detail }) {
    return (
        <>
            <Navbar />
            <div className="m-10 whitespace-pre-wrap">
                <h1 className="text-4xl">{ detail.title }</h1>
                <h2 className="text-xl">{ detail.text }</h2>
                <p className="mt-10">{ detail.description }</p>
            </div>
        </>
    );
};
