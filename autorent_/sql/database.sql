DROP TABLE IF EXISTS reservations;
DROP TABLE IF EXISTS cars;
DROP TABLE IF EXISTS users;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    role VARCHAR(20) NOT NULL,
    first_name VARCHAR(100) NOT NULL,
    last_name VARCHAR(100) NOT NULL,
    email VARCHAR(150) NOT NULL,
    phone VARCHAR(50),
    password VARCHAR(100),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE cars (
    id INT AUTO_INCREMENT PRIMARY KEY,
    brand VARCHAR(100) NOT NULL,
    model VARCHAR(100) NOT NULL,
    year INT NOT NULL,
    registration_number VARCHAR(50) NOT NULL,
    price_per_day DECIMAL(10,2) NOT NULL,
    fuel_type VARCHAR(50) NOT NULL,
    transmission VARCHAR(50) NOT NULL,
    seats INT NOT NULL,
    description TEXT,
    image VARCHAR(255),
    status VARCHAR(30) DEFAULT 'vaba',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE reservations (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    car_id INT NOT NULL,
    start_date DATE NOT NULL,
    end_date DATE NOT NULL,
    total_price DECIMAL(10,2) NOT NULL,
    status VARCHAR(30) DEFAULT 'active',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO users(role, first_name, last_name, email, phone, password) VALUES
('admin', 'Admin', 'Kasutaja', 'admin@autorent.ee', '', 'admin123');

INSERT INTO cars(brand, model, year, registration_number, price_per_day, fuel_type, transmission, seats, description, image, status) VALUES
('Toyota', 'Corolla', 2020, '123ABC', 35.00, 'Bensiin', 'Automaat', 5, 'Mugav ja ökonoomne auto igapäevaseks sõiduks.', 'https://loremflickr.com/400/250/toyota,car', 'vaba'),
('BMW', '320', 2019, '456BMW', 55.00, 'Diisel', 'Automaat', 5, 'Hea valik pikemaks sõiduks ja mugavaks reisiks.', 'https://loremflickr.com/400/250/bmw,car', 'vaba'),
('Audi', 'A4', 2021, '789AUD', 60.00, 'Bensiin', 'Automaat', 5, 'Korralik auto, hea varustusega ja mugav salong.', 'https://loremflickr.com/400/250/audi,car', 'vaba'),
('Volkswagen', 'Golf', 2018, '111VWG', 32.00, 'Bensiin', 'Manuaal', 5, 'Lihtne ja soodne auto linnas sõitmiseks.', 'https://loremflickr.com/400/250/volkswagen,car', 'vaba'),
('Skoda', 'Octavia', 2022, '222SKD', 45.00, 'Diisel', 'Automaat', 5, 'Palju ruumi ja väike kütusekulu.', 'https://loremflickr.com/400/250/skoda,car', 'vaba'),
('Kia', 'Ceed', 2020, '333KIA', 34.00, 'Bensiin', 'Manuaal', 5, 'Praktiline auto, sobib hästi igapäevaseks kasutamiseks.', 'https://loremflickr.com/400/250/kia,car', 'vaba'),
('Mercedes-Benz', 'C200', 2021, '444MB', 70.00, 'Bensiin', 'Automaat', 5, 'Mugav premium-klassi auto.', 'https://loremflickr.com/400/250/mercedes,car', 'hoolduses'),
('Ford', 'Focus', 2019, '555FRD', 30.00, 'Bensiin', 'Manuaal', 5, 'Soodne ja lihtne rendiauto.', 'https://loremflickr.com/400/250/ford,car', 'vaba'),
('Nissan', 'Qashqai', 2021, '666NIS', 50.00, 'Bensiin', 'Automaat', 5, 'Kõrgem isteasend ja mugav sõit.', 'https://loremflickr.com/400/250/nissan,car', 'vaba'),
('Hyundai', 'i30', 2020, '777HYU', 33.00, 'Bensiin', 'Manuaal', 5, 'Töökindel ja ökonoomne auto.', 'https://loremflickr.com/400/250/hyundai,car', 'vaba'),
('Peugeot', '308', 2018, '888PEU', 29.00, 'Diisel', 'Manuaal', 5, 'Väike kütusekulu ja mugav juhitavus.', 'https://loremflickr.com/400/250/peugeot,car', 'vaba'),
('Volvo', 'V60', 2022, '999VOL', 65.00, 'Diisel', 'Automaat', 5, 'Turvaline ja ruumikas universaal.', 'https://loremflickr.com/400/250/volvo,car', 'vaba');
