import React, { useState } from 'react';
import { useNavigate } from 'react-router-dom';
import SideNav from './SideNav';
import Footer from './Footer';

function Studentinfo() {
    const [LastName, setLastName] = useState('');
    const [FirstName, setFirstName] = useState('');
    const [email, setEmail] = useState('');
    const [IDNumber, setIDNumber] = useState('');
    const [course, setCourse] = useState('');
    const [COR, setCOR] = useState('');
    const [balance, setbalance] = useState('');

    const navigate = useNavigate(); // Initialize the useNavigate hook

    const handleLastNameChange = (event) => {
        setLastName(event.target.value);
    };

    const handleFirstNameChange = (event) => {
        setFirstName(event.target.value);
    };

    const handleEmailChange = (event) => {
        setEmail(event.target.value);
    };

    const handleIDNumberChange = (event) => {
        setIDNumber(event.target.value);
    };

    const handleCourseChange = (event) => {
        setCourse(event.target.value);
    };

    const handleCORChange = (event) => {
        setCOR(event.target.value);
    };

    const handlebalanceChange = (event) => {
        setbalance(event.target.value);
    };


    const handleSave = () => {
        // Save action here, e.g., send data to a server or update state.
        console.log({
            LastName,
            FirstName,
            email,
            IDNumber,
            course,
            COR,
            balance,
        });
        alert('Student information saved!');
    };

    const handleBack = () => {
        navigate(-1); // Go back to the previous page
    };

    return (
        <div className="d-flex">
            <SideNav />
            <div className="m-4">
                <div className="max-w-full">
                    <h1>OCC BILLING</h1>
                </div>
                <div className="container" style={{ marginTop: '30px' }}>
                    <div className="p-4 bg-light rounded shadow mx-auto" style={{ maxWidth: '600px' }}>
                        <label className="d-block mb-3">
                            Last Name:
                            <input
                                type="text"
                                value={LastName}
                                onChange={handleLastNameChange}
                                className="border p-2 rounded w-100"
                            />
                        </label>
                        <label className="d-block mb-3">
                            First Name:
                            <input
                                type="text"
                                value={FirstName}
                                onChange={handleFirstNameChange}
                                className="border p-2 rounded w-100"
                            />
                        </label>
                        <label className="d-block mb-3">
                            Email:
                            <input
                                type="email"
                                value={email}
                                onChange={handleEmailChange}
                                className="border p-2 rounded w-100"
                            />
                        </label>
                        <label className="d-block mb-3">
                            ID Number:
                            <input
                                type="tel"
                                value={IDNumber}
                                onChange={handleIDNumberChange}
                                className="border p-2 rounded w-100"
                            />
                        </label>
                        <label className="d-block mb-3">
                            Course:
                            <input
                                type="text"
                                value={course}
                                onChange={handleCourseChange}
                                className="border p-2 rounded w-100"
                            />
                        </label>
                        <label className="d-block mb-3">
                            Number of COR:
                            <input
                                type="text"
                                value={COR}
                                onChange={handleCORChange}
                                className="border p-2 rounded w-100"
                            />
                        </label>
                        <label className="d-block mb-3">
                            Balance:
                            <input
                                type="text"
                                value={balance}
                                onChange={handlebalanceChange}
                                className="border p-2 rounded w-100"
                            />
                        </label>
                        <button 
                            onClick={handleSave} 
                            className="btn btn-primary w-100 mt-3"
                        >
                            Save
                        </button>
                        <button 
                            onClick={handleBack} 
                            className="btn btn-secondary w-100 mt-2"
                        >
                            Back
                        </button>
                    </div>
                </div>
            </div>
            <Footer />
        </div>
    );
}

export default Studentinfo;
