import React from 'react';
import SideNav from "./SideNav";

import BSBAFM from './BSBAFM';
import Footer from './Footer';
import 'bootstrap/dist/css/bootstrap.min.css';

function FM() {
    return (
        <div className="d-flex">
            <SideNav />
            <div className="m-4">  
            </div>
            <div className="container">
                    <BSBAFM />
                </div>
                <Footer />
        </div>
    );
}

export default FM;
