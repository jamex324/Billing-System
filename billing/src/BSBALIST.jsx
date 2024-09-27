import React, { useState, useEffect } from "react";
import axios from "axios";
import { useNavigate } from 'react-router-dom';
import Search from "./assets/components/Search";
import './BSBALIST.css';

function BSBALIST() {
  const [bsbamm, setBsbamm] = useState([]); 
  const [loading, setLoading] = useState(true);
  const [error, setError] = useState(null); // State to handle errors
  const [searchTerm, setSearchTerm] = useState(""); // State for search term
  const navigate = useNavigate(); 

  useEffect(() => {
    const fetchStudents = async () => {
      try {
        const response = await axios.get("http://127.0.0.1:8000/api/student-bsbamm");
        setBsbamm(response.data);
      } catch (error) {
        setError("Error fetching students. Please try again later.");
        console.error("Error fetching students:", error);
      } finally {
        setLoading(false);
      }
    };

    fetchStudents();
  }, []);

  if (loading) {
    return <p>Loading students...</p>;
  }

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

  // Filtered students based on search term
  const filteredStudents = bsbamm.filter(student => {
    const fullName = `${student.student.first_name} ${student.student.last_name}`.toLowerCase();
    const schoolId = student.student.school_id.toLowerCase();
    return (
      fullName.includes(searchTerm.toLowerCase()) ||
      schoolId.includes(searchTerm.toLowerCase())
    );
  });

  return (
    <div className="d-flex">
      <div className="container my-5 flex-grow-1"> {/* Main content area */}
        <h1>Marketing Management</h1>
        <input
          type="text"
          placeholder="Search by school ID, first name, or last name..."
          value={searchTerm}
          onChange={(e) => setSearchTerm(e.target.value)} // Update search term on change
          className="form-control mb-3"
        />
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
            {filteredStudents.length > 0 ? (
              filteredStudents.map((student, index) => (
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

export default BSBALIST;
