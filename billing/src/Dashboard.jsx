import React from 'react';
import SideNav from "./SideNav";
import Footer from './Footer';
import 'bootstrap/dist/css/bootstrap.min.css';
import './App.css';

function Dashboard() {
    return (
        <div className="d-flex">
            <SideNav />
            <div className="m-4">
                <div className="max-w-full">
                <h1 className="roman-text">Opol Community College</h1>
                </div>
            </div>
            <Footer />
        </div>
    );
}

export default Dashboard;
