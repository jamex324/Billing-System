import React, { useState } from "react";
import axios from "axios";

function AddStudent() {
  const [isModalOpen, setIsModalOpen] = useState(false);

  const openModal = () => setIsModalOpen(true);
  const closeModal = () => setIsModalOpen(false);

  const [SchoolId, setSchoolId] = useState('');
  const [FirstName, setFirstName] = useState('');
  const [LastName, setLastName] = useState('');
  const [Address, setAddress] = useState('');
  const [Phone, setPhone] = useState('');
  const [Email, setEmail] = useState('');

  const [error, setError] = useState(null); // For error handling

  const handleSubmit = async (e) => {
    e.preventDefault();

    // Form validation example
    if (!SchoolId || !FirstName || !LastName || !Email || !Phone) {
      setError("Please fill out all required fields");
      return;
    }

    try {
      const response = await axios.post(
        'http://127.0.0.1:8000/api/add-student',
        {
          school_id: SchoolId,
          first_name: FirstName,
          last_name: LastName,
          address: Address,
          phone: Phone,
          email: Email,
        },
        {
          headers: {
            'Content-Type': 'application/json',
          },
          withCredentials: true,
        }
      );
      alert("Student successfully added!");

      // Reset form fields
      setSchoolId('');
      setFirstName('');
      setLastName('');
      setAddress('');
      setPhone('');
      setEmail('');
      setError(null); // Clear error
      closeModal(); // Close modal on success
    } catch (error) {
      console.error('Error:', error);
      setError('Failed to add student. Please try again.');
    }
  };

  return (
    <>
      {/* Button to Trigger Modal */}
      <button type="button" className="btn btn-primary" onClick={openModal}>
        Add Student
      </button>

      {/* Modal */}
      {isModalOpen && (
        <div
          className="modal fade show"
          style={{ display: "block", backgroundColor: "rgba(0,0,0,0.5)" }}
          tabIndex="-1"
          role="dialog"
          aria-labelledby="exampleModalCenterTitle"
          aria-hidden="false"
        >
          <div className="modal-dialog modal-dialog-centered" role="document">
            <div className="modal-content">
              <div className="modal-header d-flex justify-content-center">
                <h5 className="modal-title text-center" id="exampleModalLongTitle">
                  Add Student
                </h5>
                <button type="button" className="btn-close" onClick={closeModal} aria-label="Close"></button>
              </div>
              <div className="modal-body">
                {error && <div className="alert alert-danger">{error}</div>}
                <form onSubmit={handleSubmit}>
                  <div className="form-group m-2">
                    <label>School ID:</label>
                    <input
                      type="text"
                      className="form-control"
                      value={SchoolId}
                      onChange={(e) => setSchoolId(e.target.value)}
                      required
                    />
                  </div>
                  <div className="d-flex">
                    <div className="form-group m-2">
                      <label>First Name:</label>
                      <input
                        type="text"
                        className="form-control"
                        value={FirstName}
                        onChange={(e) => setFirstName(e.target.value)}
                        required
                      />
                    </div>
                    <div className="form-group m-2">
                      <label>Last Name:</label>
                      <input
                        type="text"
                        className="form-control"
                        value={LastName}
                        onChange={(e) => setLastName(e.target.value)}
                        required
                      />
                    </div>
                  </div>
                  <div className="form-group">
                    <label>Address:</label>
                    <input
                      type="text"
                      className="form-control"
                      value={Address}
                      onChange={(e) => setAddress(e.target.value)}
                    />
                  </div>
                  <div className="d-flex">
                    <div className="form-group m-2">
                      <label>Phone #:</label>
                      <input
                        type="text"
                        className="form-control"
                        value={Phone}
                        onChange={(e) => setPhone(e.target.value)}
                        required
                      />
                    </div>
                    <div className="form-group m-2">
                      <label>Email:</label>
                      <input
                        type="email"
                        className="form-control"
                        value={Email}
                        onChange={(e) => setEmail(e.target.value)}
                        required
                      />
                    </div>
                  </div>
                  <input type="submit" className="btn btn-primary form-control" />
                </form>
              </div>
            </div>
          </div>
        </div>
      )}
    </>
  );
}

export default AddStudent;
