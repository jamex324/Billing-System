import React from 'react';
import SideNav from "./SideNav";
import BSBAMM from './BSBALIST';
import Footer from './Footer';
import 'bootstrap/dist/css/bootstrap.min.css';

function BSBA() {
    return (
        <div className="d-flex">
            <SideNav />
            <div className="m-4">
            </div>
            <div className="container">
                    <BSBAMM />
                </div>
                <Footer />
        </div>
    );
}

export default BSBA;
