import React, { useState, useEffect } from "react";
import axios from "axios";
import { useNavigate } from 'react-router-dom';
import Search from "./assets/components/Search";
import './BSITList.css';

function BSITList() {
  const [bsit, setBsit] = useState([]); 
  const [loading, setLoading] = useState(true); 
  const [error, setError] = useState(null); // State to handle errors
  const navigate = useNavigate(); 

  // Fetch students from the backend
  useEffect(() => {
    const fetchStudents = async () => {
      try {
        const response = await axios.get("http://127.0.0.1:8000/api/student-bsit");
        setBsit(response.data); 
      } catch (error) {
        setError("Error fetching students. Please try again later."); // Set error message
        console.error("Error fetching students:", error);
      } finally {
        setLoading(false); 
      }
    };

    fetchStudents();
  }, []);

  // Handle loading state
  if (loading) {
    return (
      <div className="loader-container text-center my-5">
        <div className="spinner-border text-primary" role="status">
          <span className="sr-only">Loading...</span>
        </div>
        <p>Loading students...</p>
      </div>
    );
  }

  // Display error message if there's an error
  if (error) {
    return (
      <div className="alert alert-danger text-center my-5">
        {error}
      </div>
    );
  }

  // View button handler
  const handleView = (studentId) => {
    navigate(`/student/${studentId}`);
  };

  return (
    <div className="d-flex"> 
      <div className="container my-5 flex-grow-1"> 
        <h1>BSIT Student List</h1>
        <Search /> {/* Include the search component if needed */}
        <table className="table table-bordered">
          <thead>
            <tr>
              <th>School ID</th>
              <th>First Name</th>
              <th>Last Name</th>
              <th>Course Name</th>
              <th>Year Level</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            {bsit.length > 0 ? (
              bsit.map((student, index) => (
                <tr key={index}>
                  <td>{student.student.school_id}</td>
                  <td>{student.student.first_name}</td>
                  <td>{student.student.last_name}</td>
                  <td>{student.course.course_name}</td>
                  <td>{student.year_level.year_name}</td>
                  <td>
                    <button 
                      className="btn btn-primary" 
                      onClick={() => handleView(student.student.id)}
                    >
                      View
                    </button>
                  </td>
                </tr>
              ))
            ) : (
              <tr>
                <td colSpan="6" className="text-center">No students found</td>
              </tr>
            )}
          </tbody>
        </table>
      </div>
    </div>
  );
}

export default BSITList;
