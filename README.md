
# Real Estate Management System (PHP & MySQL)

A full-featured web application built with **core PHP** and **MySQL** for managing property listings, user roles, payments, and admin operations—all within a clean, responsive interface.

---

## 🏠 Overview

This project supports three user roles:

- **Admin**: Manage users, listings, payments, and site content  
- **Agents/Builders**: Submit and manage property listings  
- **Buyers/Tenants**: Browse listings, calculate instalments, and contact agents

---

## ⚡ Key Features

- **Role-based Authentication**  
  Secure login/signup for Admin, Agents/Builders, and Buyers/Tenants

- **Property CRUD & Listings**  
  Create, edit, delete listings with details like type, price, location, images, and amenities

- **Search & Filter**  
  Find listings by city, state, price range, property type, and featured status

- **Instalment Calculator**  
  Frontend tool for estimating payment breakdowns

- **Admin Dashboard**  
  Manage users, listings, cities/states, testimonials, feedback, and site pages

- **Contact & Feedback**  
  Users can send messages; Admin can review and convert feedback into testimonials

---

## 🛠️ Tech Stack

- **Backend**: Plain PHP (5.6+ / 7.x) using MySQLi or PDO  
- **Database**: MySQL  
- **Frontend**: HTML5, CSS3, Bootstrap, JS/jQuery  
- **Environment**: XAMPP/WAMP/LAMP stack

---

## 📁 Project Structure

```
Real-Estate-Management-System/
├── admin/                  # Admin panel (CRUD, dashboard)
├── assets/                 # Images, CSS, JS, fonts
├── include/                # config.php (DB connection)
├── index.php               # Home/listings page
├── propertydetail.php      # Detailed property view
├── propertygrid.php        # Listings grid
├── submitproperty.php      # Agent listing submission page
├── calc.php                # Instalment calculator logic
├── contact.php             # Contact form
├── login.php / register.php / logout.php
└── stateproperty.php       # Filter by state listings
```

---

## 🚀 Setup & Installation

1. **Clone the repository**
   ```bash
   git clone https://github.com/satakratu6/Real-Estate-Management-System.git
   cd Real-Estate-Management-System
   ```

2. **Install prerequisites**
   - PHP ≥ 5.6 (7.x recommended) with MySQLi or PDO  
   - MySQL database  
   - XAMPP/WAMP/LAMP environment

3. **Start your stack**  
   Launch Apache and MySQL via XAMPP/WAMP.

4. **Import the database**  
   - In phpMyAdmin, create a new DB (e.g., `realestate`)  
   - Import the provided `.sql` schema file

5. **Configure DB connection**  
   Update `include/config.php`:
   ```php
   $conn = new mysqli('localhost','username','password','realestate');
   ```

6. **Launch the app**  
   Visit: `http://localhost/Real-Estate-Management-System/`

---

## 🎯 User Roles & Flow

- **Admin**: Manage all entities—users, listings, testimonials, cities/states, and feedback.
- **Agents/Builders**: Register, submit and manage listings, and view enquiries.
- **Buyers/Tenants**: Browse/filter listings, calculate instalments, and message agents.

---

## 🔮 Future Enhancements

- 🗺️ Google Maps integration for location-based searches  
- 📸 Image gallery uploads for listings  
- 🏦 Payment gateway support for deposits  
- 📅 Appointment scheduling features  
- 📊 Analytics dashboard for deeper insights

---

## 🤝 Contributing

1. Fork this repo  
2. Create a new branch (`git checkout -b feature-name`)  
3. Add your improvements  
4. Push to your fork (`git push origin feature-name`)  
5. Open a pull request

---

## 📄 License

Licensed under the **MIT License**

---

## 👤 Author

**Satakratu Chakraborty** – [@satakratu6](https://github.com/satakratu6)  
📧 satakratu.madhu@gmail.com

---

Thank you for checking out the **Real Estate Management System**! Built with PHP, it’s a scalable foundation for managing properties, users, and workflows. 🏡
