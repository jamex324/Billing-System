import React, { useState, useEffect } from "react";
import axios from "axios";

function BSEDList() {
  const [bsed, setBsed] = useState([]); // State to store fetched student data
  const [loading, setLoading] = useState(true); // Loading state to handle UI

  useEffect(() => {
    const fetchStudents = async () => {
      try {
        const response = await axios.get("http://127.0.0.1:8000/api/student-bsed");
        console.log(response.data); // Check the structure of the API response
        setBsed(response.data);
      } catch (error) {
        console.error("Error fetching students:", error);
      } finally {
        setLoading(false);
      }
    };
  
    fetchStudents();
  }, []);
  

  // Display loading spinner or message while fetching data
  if (loading) {
    return <p>Loading students...</p>;
  }

  return (
    <div className="container">
      <h1>BSED Student List</h1>
      <table className="table table-bordered">
        <thead>
          <tr>
            <th>School ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Course Name</th>
            <th>Year Level</th>
          </tr>
        </thead>
        <tbody>
          {bsed.length > 0 ? (
            bsed.map((student, index) => (
              <tr key={index}>
                <td>{student.student?.school_id || 'N/A'}</td>
                <td>{student.student?.first_name || 'N/A'}</td>
                <td>{student.student?.last_name || 'N/A'}</td>
                <td>{student.course?.course_name || 'N/A'}</td>
                <td>{student.year_level?.year_name || 'N/A'}</td>
              </tr>
            ))
          ) : (
            <tr>
              <td colSpan="5">No students found</td>
            </tr>
          )}
        </tbody>
      </table>
    </div>
  );
}

export default BSEDList;
