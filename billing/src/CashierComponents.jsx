import React, { useState } from "react";
import 'bootstrap/dist/css/bootstrap.min.css';

function CashierComponents() {
    const [itemName, setItemName] = useState("");
    const [itemPrice, setItemPrice] = useState("");
    const [itemQuantity, setItemQuantity] = useState("");
    const [cart, setCart] = useState([]);

    // Handle adding item to cart
    const addToCart = () => {
        if (!itemName || !itemPrice || !itemQuantity) {
            alert("Please fill out all fields before adding an item.");
            return;
        }

        const newItem = {
            id: cart.length + 1,
            name: itemName,
            price: parseFloat(itemPrice),
            quantity: parseInt(itemQuantity),
        };

        setCart([...cart, newItem]);

        // Clear input fields after adding
        setItemName("");
        setItemPrice("");
        setItemQuantity("");
    };

    // Handle removing item from cart
    const removeFromCart = (itemId) => {
        setCart(cart.filter(item => item.id !== itemId));
    };

    // Calculate total price
    const getTotalPrice = () => {
        return cart.reduce((total, item) => total + item.price * item.quantity, 0).toFixed(2);
    };

    return (
        <div className="container mt-5">
            <h1 className="text-center mb-5">Opol Community College</h1>

            <div className="row">
                {/* Form for adding items */}
                <div className="col-md-6">
                    <div className="card shadow-sm">
                        <div className="card-header bg-primary text-white">
                            <h4>Add Payment Details</h4>
                        </div>
                        <div className="card-body">
                            <div className="form-group">
                                <label>Purpose:</label>
                                <input
                                    type="text"
                                    className="form-control"
                                    value={itemName}
                                    onChange={(e) => setItemName(e.target.value)}
                                    placeholder="Purpose of the payment"
                                />
                            </div>
                            <div className="form-group mt-3">
                                <label>Price:</label>
                                <input
                                    type="number"
                                    className="form-control"
                                    value={itemPrice}
                                    onChange={(e) => setItemPrice(e.target.value)}
                                    placeholder="Enter price"
                                />
                            </div>
                            <div className="form-group mt-3">
                                <label>Quantity:</label>
                                <input
                                    type="number"
                                    className="form-control"
                                    value={itemQuantity}
                                    onChange={(e) => setItemQuantity(e.target.value)}
                                    placeholder="Enter quantity"
                                />
                            </div>
                            <button className="btn btn-success mt-4 w-100" onClick={addToCart}>
                                Add
                            </button>
                        </div>
                    </div>
                </div>

                {/* Receipt Section */}
                <div className="col-md-6">
                    <div className="card shadow-sm">
                        <div className="card-header bg-success text-white">
                            <h4>Receipt</h4>
                        </div>
                        <div className="card-body">
                            {cart.length === 0 ? (
                                <p>Your cart is empty.</p>
                            ) : (
                                <table className="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Purpose</th>
                                            <th>Price</th>
                                            <th>Quantity</th>
                                            <th>Total</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        {cart.map((item) => (
                                            <tr key={item.id}>
                                                <td>{item.name}</td>
                                                <td>₱{item.price.toFixed(2)}</td>
                                                <td>{item.quantity}</td>
                                                <td>₱{(item.price * item.quantity).toFixed(2)}</td>
                                                <td>
                                                    <button className="btn btn-danger" onClick={() => removeFromCart(item.id)}>
                                                        Remove
                                                    </button>
                                                </td>
                                            </tr>
                                        ))}
                                    </tbody>
                                </table>
                            )}
                            <div className="mt-4 text-right">
                                <h4>Total: ₱{getTotalPrice()}</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    );
}

export default CashierComponents;
