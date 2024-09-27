import React from 'react';
import SideNav from "./SideNav";

import Footer from './Footer';
import CashierComponents from './CashierComponents';
import 'bootstrap/dist/css/bootstrap.min.css';

function Cashier() {
    return (
        <div className="d-flex">
            <SideNav />
            <div className="m-4">
                <div className="max-w-full">
                </div>
                <div className="container" style={{ marginTop: '30px' }}>
                 
                </div>
            </div>
            <div className="container">
                    <CashierComponents />
                </div>
                <Footer />
        </div>
    );
}

export default Cashier;
