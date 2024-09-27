import React from 'react';
import SideNav from "./SideNav";
import Footer from './Footer';
import 'bootstrap/dist/css/bootstrap.min.css';
import StudentList from './BSITLIST'; // Ensure this import is correct

function BSIT() {
    return (
        <div className="d-flex">
            <SideNav />
            <div className="m-4">
                <div className="max-w-full">
                    {/* You can add any additional content or components here if needed */}
                </div>
            </div>
            <div className="container">
                <StudentList />
            </div>
            <Footer />
        </div>
    );
}

export default BSIT;
