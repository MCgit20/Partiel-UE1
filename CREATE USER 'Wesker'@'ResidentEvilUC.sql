CREATE USER 'Wesker'@'ResidentEvilUC.fr' IDENTIFIED BY 'MDPSécurisé';
GRANT ALL PRIVILEGES ON UmbrellaCorporation.* TO 'Wesker'@'ResidentEvilUC.fr';
FLUSH PRIVILEGES;


SELECT s.nom, s.prenom, s.date_embauche
FROM scientifique s
JOIN scientifique_medicament sm ON s.id = sm.idScientifique
JOIN medicament m ON sm.idMedicament = m.id
WHERE m.nom = 'T'
ORDER BY s.nom ASC, s.date_embauche ASC;



SELECT DISTINCT s.id, s.nom, s.prenom, s.date_checkup_vaccin
FROM scientifique s
LEFT JOIN injection i ON s.id = i.idScientifique
LEFT JOIN vaccin v ON i.idVaccin = v.id
WHERE DATEDIFF(NOW(), i.date_vaccination) > v.duree_vaccin
   OR i.id IS NULL;


