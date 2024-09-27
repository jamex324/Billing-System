import React, { useState, useEffect } from "react";
import axios from "axios";
import Search from "./assets/components/Search";
import './BEEDList.css'; // Import your custom CSS

function BEEDLIST() {
  const [beed, setBeed] = useState([]); // State to store fetched student data
  const [loading, setLoading] = useState(true); // Loading state to handle UI

  // Fetch students from the backend
  useEffect(() => {
    const fetchStudents = async () => {
      try {
        const response = await axios.get("http://127.0.0.1:8000/api/student-beed");
        setBeed(response.data); // Set the response data to state
      } catch (error) {
        console.error("Error fetching students:", error);
      } finally {
        setLoading(false); // Stop loading when fetch is complete
      }
    };

    fetchStudents();
  }, []);

  // Display loading spinner or message while fetching data
  if (loading) {
    return (
      <div className="loader-container">
        <div className="spinner-border text-primary" role="status">
          <span className="sr-only">Loading...</span>
        </div>
        <p className="text-center">Loading students...</p>
      </div>
    );
  }

  return (
    <div className="container my-5">
      <Search />
      <div className="card shadow-sm">
        <div className="card-header bg-primary text-white text-center">
          <h1>BEED Student List</h1>
        </div>
        <div className="card-body">
          <table className="table table-hover table-striped table-bordered">
            <thead className="thead-dark">
              <tr>
                <th>School ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Course Name</th>
                <th>Year Level ID</th>
              </tr>
            </thead>
            <tbody>
              {beed.length > 0 ? (
                beed.map((student, index) => (
                  <tr key={index}>
                    <td>{student.student?.school_id || "N/A"}</td>
                    <td>{student.student?.first_name || "N/A"}</td>
                    <td>{student.student?.last_name || "N/A"}</td>
                    <td>{student.course?.course_name || "N/A"}</td>
                    {/* Display Year Level ID */}
                    <td>{student.year_level.year_name}</td>
                  </tr>
                ))
              ) : (
                <tr>
                  <td colSpan="5" className="text-center">No students found</td>
                </tr>
              )}
            </tbody>
          </table>
        </div>
      </div>
    </div>
  );
}

export default BEEDLIST;
