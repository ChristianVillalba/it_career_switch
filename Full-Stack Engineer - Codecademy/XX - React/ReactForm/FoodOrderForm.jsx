import React, { useState } from "react";

function FoodOrderForm() {
  const [name, setName] = useState("");
  const [phone, setPhone] = useState("");
  const [address, setAddress] = useState("");
  const [order, setOrder] = useState("");

  const handleSubmit = (e) => {
    e.preventDefault();
// without this, the form will be reseted
    alert(`Order Successful!\nYour order was ${order}.\nPlease show your confirmation number for pickup.`);
  };

  return (
    <form onSubmit={handleSubmit}>
      <label htmlFor="name">Name:</label>
      <input
        type="text"
        id="name"
        name="name"
        value={name}
        onChange={(e) => setName(e.target.value)}
      />
      <label htmlFor="phone">Phone:</label>
      <input
        type="tel"
        id="phone"
        name="phone"
        value={phone}
        onChange={(e) => setPhone(e.target.value)}
      />
      <label htmlFor="address">Address:</label>
      <input
        type="text"
        id="address"
        name="address"
        value={address}
        onChange={(e) => setAddress(e.target.value)}
      />
      <label htmlFor="order">Order:</label>
      <input
        type="text"
        id="order"
        name="order"
        value={order}
        onChange={(e) => setOrder(e.target.value)}
      />
      <button type="submit">Submit Order</button>
    </form>
  );
}

export default FoodOrderForm;
