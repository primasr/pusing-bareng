#include <stdio.h>
#include <vector>
using namespace std;

int main() {
    int n, m, x, y;
    bool exist = true;
    vector<pair<int, int> > vec;
    vector<pair<int, int> > list;
    scanf("%d %d", &n, &m);
    for (int i = 0; i < m; i++) {
        scanf("%d %d", &x, &y);
        list.push_back(make_pair(x, y));
        if (1 <= x && x < y && y <= n) {
            vec.push_back(make_pair(x, y));
        }
    }
    for (int i = 0; i < vec.size(); i++) {
        exist = true;
        for (int j = 0; j < list.size(); j++) {
            if (vec[i].first == list[j].first || vec[i].second == list[j].first || vec[i].first == list[j].second || vec[i].second == list[j].second) continue;
            else {
                exist = false;
                break;
            }
        }
        if (exist) break;
    }
    if (exist) {
        printf("YA\n");
    } else {
        printf("TIDAK\n");
    }

    return 0;
}