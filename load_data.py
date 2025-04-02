import pandas as pd

base_url = "https://raw.githubusercontent.com/electinth/dataset-election-62-candidates/master/data/"
files = ['candidates.csv', 'party.csv', 'zone.csv', 'detailed_candidates.csv']

datasets = {file.replace('.csv', ''): pd.read_csv(base_url + file) for file in files}

# แสดงตัวอย่างข้อมูล
for name, df in datasets.items():
    print(f"\n--- ตัวอย่างข้อมูล {name} ---")
    print(df.head())
