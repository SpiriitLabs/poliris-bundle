use std::env;
use rand::Rng;
use serde_json::json;

const CITIES: [&str; 10] = [
    "Paris", "Lyon", "Marseille", "Toulouse", "Nice", 
    "Nantes", "Bordeaux", "Lille", "Strasbourg", "Rennes"
];

const PROPERTY_TYPES: [(&str, &str); 6] = [
    ("Maison", "Villa"),
    ("Appartement", "T2"),
    ("Appartement", "T3"),
    ("Appartement", "T4"),
    ("Terrain", "Constructible"),
    ("Maison", "Pavillon"),
];

const TRANSACTION_TYPES: [&str; 2] = ["vente", "location"];

fn generate_property(i: usize, rng: &mut impl Rng) -> serde_json::Value {
    let city_idx = rng.gen_range(0..CITIES.len());
    let type_idx = rng.gen_range(0..PROPERTY_TYPES.len());
    let transaction_idx = rng.gen_range(0..2);
    
    let city = CITIES[city_idx];
    let (prop_type, sous_type) = PROPERTY_TYPES[type_idx];
    let transaction_type = TRANSACTION_TYPES[transaction_idx];
    let is_rental = transaction_type == "location";
    
    let prix = if is_rental {
        800 + (i % 1200)
    } else {
        150000 + (i % 500000)
    };
    
    let surface_habitable = 50 + (i % 200);
    let surface_terrain = if prop_type == "Terrain" {
        Some(300 + (i % 1000))
    } else {
        None
    };
    
    let mut property = json!({
        "identifiant": {
            "agenceId": format!("AGENCY{:03}", (i % 100) + 1),
            "agencePropertyRef": format!("REF-{}-{:06}", prop_type.to_uppercase(), i),
            "annonceType": transaction_type,
            "annonceIdTechnique": format!("TECH-ID-{:06}", i)
        },
        "type": {
            "type": prop_type,
            "sousType": sous_type
        },
        "localisation": {
            "ville": city,
            "codePostal": format!("{}", 75000 + (i % 20)),
            "pays": "France",
            "adresse": format!("{} Rue de la République", i % 100),
            "latitude": 48.8566 + ((i % 100) as f64 * 0.01),
            "longitude": 2.3522 + ((i % 100) as f64 * 0.01),
            "proximite": "Proche commodités"
        },
        "prix": {
            "prix": prix,
            "mentionPrix": if is_rental { "CC" } else { "FAI" }
        },
        "surface": {
            "habitable": surface_habitable,
            "terrain": surface_terrain
        },
        "contact": {
            "nom": format!("Agent {}", (i % 50) + 1),
            "telephone": format!("01{:08}", i % 100000000),
            "email": format!("agent{}@agency.com", (i % 50) + 1),
            "siteWeb": format!("www.agency{}.com", (i % 10) + 1)
        },
        "detail": {
            "activitesCommerciales": format!("{} {}", sous_type, if is_rental { "à louer" } else { "à vendre" }),
            "description": format!("Description détaillée du bien immobilier numéro {}. Bien situé dans un quartier calme avec toutes commodités à proximité.", i)
        },
        "photos": [
            format!("https://example.com/photos/property{}-1.jpg", i),
            format!("https://example.com/photos/property{}-2.jpg", i)
        ],
        "photosTitres": [
            "Vue principale",
            "Vue intérieure"
        ]
    });
    
    if is_rental {
        property["location"] = json!({
            "loyerMensuel": prix,
            "charges": 50 + (i % 150)
        });
    }
    
    if prop_type == "Terrain" {
        property["terrain"] = json!({
            "surface": surface_terrain,
            "constructible": true,
            "viabilise": (i % 2) == 0,
            "cos": 0.3 + ((i % 10) as f64 * 0.05)
        });
    }
    
    property
}

fn main() {
    let args: Vec<String> = env::args().collect();
    let count: usize = if args.len() > 1 {
        match args[1].parse() {
            Ok(n) if n >= 1 && n <= 100000 => n,
            _ => {
                eprintln!("Error: Count must be between 1 and 100000");
                std::process::exit(1);
            }
        }
    } else {
        1000
    };
    
    let mut rng = rand::thread_rng();
    let mut properties = Vec::with_capacity(count);
    
    for i in 1..=count {
        properties.push(generate_property(i, &mut rng));
    }
    
    let json_output = serde_json::to_string_pretty(&properties).unwrap();
    println!("{}", json_output);
}
