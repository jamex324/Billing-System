import React from 'react';
import AddStudent from './assets/components/AddStudent';
import { Link, NavLink } from 'react-router-dom';
import './SideNav.css';

const links = [
    { path: '/bsit', label: 'BSIT' },
    { path: '/bsbamm', label: 'BSBA' },
    { path: '/beed', label: 'BEED' },
    { path: '/bsed', label: 'BSED' },
    { path: '/cashier', label: 'Cashier' },

];

function SideNav() {
    return (
        <div className="side-nav d-flex flex-column flex-shrink-0 p-3">
            <div className="logo-container text-center mb-3">
                <img src="logo.png" alt="LOGO" className="logo" />
            </div>
            <h1 className="admin-title">ADMIN</h1>
            <hr className="divider" />
            <ul className="nav flex-column mb-auto">
                <li className="nav-item">
                    <NavLink 
                        to="/dashboard" 
                        className="nav-link"
                        activeClassName="active"
                    >
                        Dashboard
                    </NavLink>
                </li>
                {links.map(link => (
                    <li key={link.path} className="nav-item">
                        <NavLink 
                            to={link.path} 
                            className="nav-link"
                            activeClassName="active"
                        >
                            {link.label}
                        </NavLink>
                    </li>
                ))}
            </ul>
            <AddStudent />
            <div className="mt-auto">
                <Link
                    to="/"
                    className="logout-link"
                >
                    Logout
                </Link>
            </div>
        </div>
    );
}

export default SideNav;
