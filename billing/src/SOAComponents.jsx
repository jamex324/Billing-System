import React, { useEffect, useState } from 'react';
import { useParams } from 'react-router-dom';
import axios from 'axios';
import './SOAComponents.css';
import { useNavigate } from 'react-router-dom';

function SOAComponents() {
  const { id } = useParams(); // Extract student ID from URL
  const [student, setStudent] = useState(null); // Student data state
  const [loading, setLoading] = useState(true); // Loading state
  const [error, setError] = useState(null); // Error state
  const navigate = useNavigate();

  // Fetch student data based on student ID
  useEffect(() => {
    const fetchStudentData = async () => {
      try {
        const studentResponse = await axios.get(`http://127.0.0.1:8000/api/students-get/${id}`);
        setStudent(studentResponse.data); // Set student data
      } catch (err) {
        console.error("Error fetching student data:", err);
        setError("Failed to fetch student data.");
      } finally {
        setLoading(false); // Set loading to false once request is completed
      }
    };

    fetchStudentData();
  }, [id]);

  // Function to format date to MM/DD/YYYY
  const formatDate = (dateString) => {
    if (!dateString) return 'N/A';
    const date = new Date(dateString);
    const options = { month: 'numeric', day: 'numeric', year: 'numeric' };
    return date.toLocaleDateString(undefined, options); // Format date
  };

  if (loading) {
    return <div>Loading...</div>; // Show loading state
  }

  if (error) {
    return <div className="error-message">{error}</div>; // Show error message
  }

  const COR = (enrollmentRecordsID) => {
    navigate(`/cor/${enrollmentRecordsID}`);
  };

  return (
    <div className="container-fluid">
      <div className="row">
        <div className="col-md-9">
          <h1 className="text-center title">Students Enrollment Records</h1>
          <br />

          {student && (
            <div className="student-info mb-4">
              <h3 className="text-center">{student.first_name} {student.last_name}</h3>
              <p className="text-center">Student ID: {student.school_id}</p>
              <p className="text-center">Email: {student.email}</p>

              <p className="text-center">
                Program: {student.enrollment_records?.[0]?.course?.course_name || 'N/A'}
              </p>
              <p className="text-center">
                Year Level: {student.enrollment_records?.[0]?.year_level?.year_name || 'N/A'}
              </p>

              {/* Enrollment Records Table */}
              <table className="table mt-4">
                <thead>
                  <tr>
                    <th className='text-center'>Course</th>
                    <th className='text-center'>Year Level</th>
                    <th className='text-center'>Enrolled Date</th>
                    <th className='text-center'>Status</th> {/* Added Status column */}
                    <th className='text-center'>Action</th>
                  </tr>
                </thead>
                <tbody>
                  {student.enrollment_records?.length > 0 ? (
                    student.enrollment_records.map((record, index) => (
                      <tr key={index}>
                        <td className='text-center'>{record.course?.course_name || 'N/A'}</td>
                        <td className='text-center'>{record.year_level?.year_name || 'N/A'}</td>
                        <td className='text-center'>{formatDate(record.created_at)}</td>
                        <td className='text-center'>
                          <div
                            className={`inline-block px-3 py-1 rounded-full text-white ${record?.status === 'paid' ? 'bg-green-400' : 'bg-red-400'}`}
                          >
                            {record?.status}
                          </div>
                        </td>
                        <td className='text-center'><button
                          className="btn btn-primary"
                          onClick={() => COR(record.id)}
                        >
                          View
                        </button></td>
                      </tr>
                    ))
                  ) : (
                    <tr>
                      <td colSpan="4" className="text-center">No enrollment records found.</td>
                    </tr>
                  )}
                </tbody>
              </table>
            </div>
          )}
        </div>
      </div>
    </div>
  );
}

export default SOAComponents;
