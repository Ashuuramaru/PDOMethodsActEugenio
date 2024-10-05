CREATE TABLE Vehicle (
    VehicleID INT PRIMARY KEY,
    OwnerID INT NOT NULL,
    Make VARCHAR(50),
    Model VARCHAR(50),
    Year INT,
    LicensePlate VARCHAR(20),
    Mileage INT,
    FOREIGN KEY (OwnerID) REFERENCES Owner(OwnerID)
);

CREATE TABLE Owner (
    OwnerID INT PRIMARY KEY,
    FirstName VARCHAR(50),
    LastName VARCHAR(50),
    Phone VARCHAR(15),
    Email VARCHAR(100)
);

CREATE TABLE Service (
    ServiceID INT PRIMARY KEY,
    VehicleID INT NOT NULL,
    MechanicID INT,
    ServiceDate DATE,
    Description TEXT,
    Cost DECIMAL(10, 2),
    MileageAtService INT,
    FOREIGN KEY (VehicleID) REFERENCES Vehicle(VehicleID),
    FOREIGN KEY (MechanicID) REFERENCES Mechanic(MechanicID)
);

CREATE TABLE Parts (
    PartID INT PRIMARY KEY,
    PartName VARCHAR(100),
    PartCost DECIMAL(10, 2),
    Quantity INT,
    ServiceID INT,
    FOREIGN KEY (ServiceID) REFERENCES Service(ServiceID)
);

CREATE TABLE Mechanic (
    MechanicID INT PRIMARY KEY,
    FirstName VARCHAR(50),
    LastName VARCHAR(50),
    Specialization VARCHAR(100)
);