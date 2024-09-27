import React from 'react';
import SideNav from "./SideNav";
import BSEDLIST from './BSEDLIST';
import Footer from './Footer';
import 'bootstrap/dist/css/bootstrap.min.css';

function BSED() {
    return (
        <div className="d-flex">
            <SideNav />
            <div className="container">
                    <BSEDLIST />
                </div>
                <Footer />
        </div>
    );
}

export default BSED;
