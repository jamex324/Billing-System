import React from 'react';
import SideNav from "./SideNav";
import Footer from './Footer';
import 'bootstrap/dist/css/bootstrap.min.css';
import SOAComponents from './SOAComponents';

function SOA() {
    return (
        <div className="d-flex">
            <SideNav />
            <div className="container">
                    <SOAComponents />
                </div>
                <Footer />
        </div>
    );
}

export default SOA;
