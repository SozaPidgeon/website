$ for F in *.jpg; do cwebp $F -o `basename ${F%.jpg}`.webp; done
