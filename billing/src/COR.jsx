import SideNav from "./SideNav";
import Footer from "./Footer";
import { useParams } from 'react-router-dom';
import React, { useEffect, useState } from 'react';
import axios from 'axios';

function COR() {
    const { id } = useParams();
    const [cor, setCor] = useState(null);
    const [loading, setLoading] = useState(true);
    const [error, setError] = useState(null);
    const [totalUnit, setTotalUnit] = useState(0);
    const [unitFee, setUnitFee] = useState(0);
    const [msFee, setMsFee] = useState(null);

    useEffect(() => {
        const fetchMSFEE = async () => {
            try {
                const MsFeeResponse = await axios.get('http://127.0.0.1:8000/api/MSFEE');
                console.log("MSFEE response: ", MsFeeResponse.data);
                setMsFee(MsFeeResponse.data); // Assuming you want to store the MSFEE data
            } catch (err) {
                console.error("Error fetching MSFEE data:", err);
                setError("Failed to fetch MSFEE data.");
            }
        };

        fetchMSFEE();
    }, []); // Empty dependency array to ensure this runs only once


    useEffect(() => {
        const fetchCorData = async () => {
            try {
                const CorResponse = await axios.get(`http://127.0.0.1:8000/api/enrollment-record/${id}`);
                console.log("COR Response:", CorResponse.data); // Check the response structure
                setCor(CorResponse.data); // Set student data

                const totalUnitResponse = await axios.get(`http://127.0.0.1:8000/api/total-unit/${id}`);
                setTotalUnit(totalUnitResponse.data.total_unit);
                const unitFeeResponse = await axios.get(`http://127.0.0.1:8000/api/total-unit/${id}`);
                setUnitFee(unitFeeResponse.data.unit_fee);
            } catch (err) {
                console.error("Error fetching COR data:", err);
                setError("Failed to fetch COR data.");
            } finally {
                setLoading(false); // Set loading to false once request is completed
            }
        };

        fetchCorData();
    }, [id]);

    if (loading) {
        return <div>Loading...</div>; // Show loading state
    }

    if (error) {
        return <div className="error-message">{error}</div>; // Show error message
    }

    const totalTuition = (unitFee || 0) + (msFee?.total_amount || 0);


    return (
        <>
            <div className="d-flex">
                <SideNav />
                <div className="m-4">
                    <div className="max-w-full">
                        <h1 className="roman-text">Opol Community College</h1>
                    </div>
                    <div>
                        {/* Ensure the enrollment_records exists before accessing its elements */}
                        {cor.enrollment_records && cor.enrollment_records.length > 0 ? (
                            <>
                                <p>Name: {cor.enrollment_records[0]?.student.first_name} {cor.enrollment_records[0]?.student.last_name}</p>
                                <p>Student ID: {cor.enrollment_records[0]?.student.school_id}</p>
                                <p>Email: {cor.enrollment_records[0]?.student.email}</p>
                            </>
                        ) : (
                            <p>No student information available.</p>
                        )}
                    </div>

                    {/* Display Enrollment Records */}
                    <h2>Enrollment Records</h2>

                    <table className="min-w-full border-collapse border border-gray-300">
                        <thead>
                            <tr className="bg-gray-200">
                                <th className="border border-gray-300 px-4 py-2">Subject</th>
                                <th className="border border-gray-300 px-4 py-2">Year Level</th>
                                <th className="border border-gray-300 px-4 py-2">Semester</th>
                                <th className="border border-gray-300 px-4 py-2">Unit</th>
                            </tr>
                        </thead>
                        <tbody>
                            {/* Check if enrollment_records exist and map through enrolledSubjects */}
                            {cor.enrollment_records && cor.enrollment_records.length > 0 ? (
                                cor.enrollment_records.map((record, index) => (
                                    record.enrolled_subjects && record.enrolled_subjects.length > 0 ? (
                                        record.enrolled_subjects.map((subjectRecord, subIndex) => (
                                            <tr key={`${index}-${subIndex}`}>
                                                <td cclassName="border border-gray-300 px-4 py-2">{subjectRecord.subjects?.subject || 'N/A'}</td>
                                                <td cclassName="border border-gray-300 px-4 py-2">{record.year_level?.year_name || 'N/A'}</td>
                                                <td cclassName="border border-gray-300 px-4 py-2">{subjectRecord.semester?.semester_id || 'N/A'}</td>
                                                <td cclassName="border border-gray-300 px-4 py-2">{subjectRecord.subjects?.unit || 'N/A'}</td>
                                            </tr>
                                        ))
                                    ) : null // Removed the message for no enrolled subjects
                                ))
                            ) : (
                                <tr>
                                    <td colSpan="4" className="border border-gray-300 px-4 py-2">No enrollment records found.</td>
                                </tr>
                            )}
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colSpan="4" className="text-right"> {/* Align text to the right */}
                                    <h5 className="font-bold">Total Units: {totalUnit}</h5>
                                    <h5 className="font-bold">Units Fee: {unitFee}</h5>
                                </td>
                            </tr>
                        </tfoot>
                    </table>

                </div>
                <div>
                    <h1>Enrollment Tuition</h1>
                    <div>
                        <h1 className="text-xl font-bold mb-4">Billing Data</h1>
                        {msFee.billing_data && msFee.billing_data.length > 0 ? ( // Check if billing_data is defined and has data
                            <table className="min-w-full border-collapse border border-gray-300">
                                <thead>
                                    <tr className="bg-gray-200">
                                        <th className="border border-gray-300 px-4 py-2">Name</th> {/* Table headers */}
                                        <th className="border border-gray-300 px-4 py-2">Amount</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {msFee.billing_data.map((fee, index) => (
                                        <tr key={index} className="hover:bg-gray-100"> {/* Add hover effect */}
                                            <td className="border border-gray-300 px-4 py-2">{fee.name}</td> {/* Table cells */}
                                            <td className="border border-gray-300 px-4 py-2">{fee.amount}</td>
                                        </tr>
                                    ))}
                                </tbody>
                            </table>
                        ) : (
                            <p>No billing data available.</p> // Fallback message if no fees are available
                        )}
                        <h5 className="font-bold mt-4">Total Amount: {msFee.total_amount}</h5> {/* Display total amount */}
                    </div>

                    <h1>Total Tuition: {totalTuition}</h1>
                    <div>
                        <button className="bg-blue-400 rounded p-3 m-2 w-full roman-text text-2xl ">Proceed Transaction... bayad2x pud!!</button>
                    </div>
                </div>

                <Footer />
            </div>
        </>
    );
}

export default COR;
