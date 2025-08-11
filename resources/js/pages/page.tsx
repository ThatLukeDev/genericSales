import React from 'react';
import ReactDOM from 'react-dom';

import Navbar from '@/components/navbar'

export default function Page({ detail }) {
    return (
        <>
            <Navbar />
            <div class="m-10 whitespace-pre-wrap">
                <h1 class="text-4xl">{ detail.title }</h1>
                <h2 class="text-xl">{ detail.text }</h2>
                <p class="mt-10">{ detail.description }</p>
            </div>
        </>
    );
};
