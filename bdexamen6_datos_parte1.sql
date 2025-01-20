USE examen6db;

-- Eliminar datos empresas
TRUNCATE companies;

-- Insertar empresas
INSERT INTO companies (name, contact_info) VALUES
('TechCorp', 'techcorp@example.com'),
('AgroSupply', 'agrosupply@example.com'),
('MediHealth', 'medihealth@example.com'),
('BuildIt', 'buildit@example.com'),
('EduTools', 'edutools@example.com');
