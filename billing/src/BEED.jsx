import React from 'react';
import SideNav from "./SideNav";
import Footer from './Footer';
import BEEDLIST from './BEEDLIST';
import 'bootstrap/dist/css/bootstrap.min.css';

function BEED() {
    return (
        <div className="d-flex">
            <SideNav />
            <div className="m-4">
                <div className="container" style={{ marginTop: '30px' }}>
                </div>
            </div>
            <div className="container">
                    <BEEDLIST />
                </div>
                <Footer />
        </div>
    );
}

export default BEED;
