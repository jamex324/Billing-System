import React, { useState, useEffect } from "react";
import axios from "axios";
import Search from "./assets/components/Search";
import SideNav from "./SideNav";

function BSBAFM() {
  const [bsbafm, setBsbafm] = useState([]); // State to store fetched student data
  const [loading, setLoading] = useState(true); // Loading state to handle UI
  const [error, setError] = useState(null); // State to handle errors
  const [searchTerm, setSearchTerm] = useState(""); // State for search input

  // Fetch students from the backend
  useEffect(() => {
    const fetchStudents = async () => {
      try {
        const response = await axios.get("http://127.0.0.1:8000/api/student-bsbafm");
        setBsbafm(response.data); // Set the response data to state
      } catch (error) {
        setError("Error fetching students. Please try again later."); // Set error message
        console.error("Error fetching students:", error);
      } finally {
        setLoading(false); // Stop loading when fetch is complete
      }
    };

    fetchStudents();
  }, []);

  // Filter students based on the search term
  const filteredStudents = bsbafm.filter(student => 
    student.student?.first_name.toLowerCase().includes(searchTerm.toLowerCase()) ||
    student.student?.last_name.toLowerCase().includes(searchTerm.toLowerCase())
  );

  // Handle View action
  const handleView = (studentId) => {
    // Add your navigation logic here, for example:
    console.log("Viewing student with ID:", studentId);
    // You might want to redirect to another route or open a modal
  };

  // Display loading spinner or message while fetching data
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

  return (
    <div className="d-flex">
      <SideNav /> {/* Render SideNav here */}
      <div className="container my-5 flex-grow-1"> {/* Ensure main content takes up remaining space */}
        <Search setSearchTerm={setSearchTerm} />
        <div className="card shadow-sm">
          <div className="card-header bg-primary text-white text-center">
            <h1>Financial Management</h1>
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
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                {filteredStudents.length > 0 ? (
                  filteredStudents.map((student, index) => (
                    <tr key={index}>
                      <td>{student.student?.school_id || "N/A"}</td>
                      <td>{student.student?.first_name || "N/A"}</td>
                      <td>{student.student?.last_name || "N/A"}</td>
                      <td>{student.course?.course_name || "N/A"}</td>
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
      </div>
    </div>
  );
}

export default BSBAFM;
