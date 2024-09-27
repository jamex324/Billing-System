import React, { useState } from "react";
import axios from "axios";
import { useNavigate } from "react-router-dom";
import './Home.css'; // Import the CSS file

function Home() {
    const [email, setEmail] = useState('');
    const [password, setPassword] = useState('');
    const [loading, setLoading] = useState(false);
    const [error, setError] = useState(null);
    const [success, setSuccess] = useState(null);
    const navigate = useNavigate();

    const handleLogin = async (e) => {
        e.preventDefault();
        setLoading(true);
        setError(null);
        setSuccess(null);

        try {
            const response = await axios.post('http://127.0.0.1:8000/api/login', {
                email,
                password,
            }, {
                headers: {
                    'Content-Type': 'application/json',
                },
                withCredentials: true,
            });

            const data = response.data;

            if (response.status === 200) {
                setSuccess(data.message);
                navigate('/dashboard');
            } else {
                setError(data.message);
            }
        } catch (error) {
            setError('Username or Password are invalid!');
        } finally {
            setLoading(false);
        }
    };

    return (
        <div className="login-container">
            <div className="login-card">
                <div className="image-container">
                    <img src="logo.png" alt="logo" className="logo-image" />
                </div>
                <form onSubmit={handleLogin} className="login-form">
                    <h5>Login billing staff account</h5>
                    <div className="form-group">
                        <label>Email</label>
                        <input
                            type="text"
                            className="form-control"
                            placeholder="Email"
                            value={email}
                            onChange={(e) => setEmail(e.target.value)}
                            required
                        />
                    </div>
                    <div className="form-group">
                        <label>Password</label>
                        <input
                            type="password"
                            className="form-control"
                            placeholder="Password"
                            value={password}
                            onChange={(e) => setPassword(e.target.value)}
                            required
                        />
                    </div>
                    <button
                        type="submit"
                        className="btn btn-primary"
                        disabled={loading}
                    >
                        {loading ? 'Logging in...' : 'Login'}
                    </button>
                    {loading && <p className="loading-text">Loading...</p>}
                    {error && <p className="error-text">{error}</p>}
                    {success && <p className="success-text">{success}</p>}
                </form>
            </div>
        </div>
    );
}

export default Home;
