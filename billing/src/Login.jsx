import { useState } from 'react';
import axios from 'axios'; // To send requests to the backend

function Login() {
  // State to manage form input
  const [email, setEmail] = useState('');
  const [password, setPassword] = useState('');
  const [error, setError] = useState('');

  // Function to handle form submission
  const handleLogin = async () => {
    try {
      const response = await axios.post('http://127.0.0.1:8000/api/login', {
        email: email,
        password: password
      });

      if (response.data.success) {
        // Handle successful login, e.g., redirect or store token
        console.log('Logged in successfully');
      } else {
        setError('Invalid credentials');
      }
    } catch (err) {
      setError('Error logging in');
    }
  }
  };

function Login()
{
    return(
        <>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
      Login
      </button>
      
   
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">Login Account</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <h1 class="modal-title fs-5">UserName</h1>
             <input type="text" name="" id="" class="form-control"/>
             <h1 class="modal-title fs-5">Password</h1>
             <input type="password" class="form-control"/>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="button" onClick={handleLogin} class="btn btn-primary">LogIn</button>
            </div>
          </div>
        </div>
      </div>
      </>
    );
}

export default Login;