import React from 'react';
import ReactDOM from 'react-dom';

export default function EditButton({ title }) {
    return (
	    <div className="inline-flex w-full justify-center"><a href={ "/admin/page/"+title } className="m-2 p-2 w-50 flex-none bg-purple-700 rounded-full clickable text-white text-center">Edit { title }</a></div>
    );
};
